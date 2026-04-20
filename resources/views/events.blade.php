@php
    $layout = (auth()->check() && auth()->user()->role === 'admin') 
        ? 'layouts.adminLayout' 
        : 'layouts.layout';

    $current = \Carbon\Carbon::create($year, $month, 1);
    $prev = $current->copy()->subMonth();
    $next = $current->copy()->addMonth();

    $startOfMonth = \Carbon\Carbon::create($year, $month, 1);
    $daysInMonth = $startOfMonth->daysInMonth;
@endphp

@extends($layout)

@section('title', 'Events')

@section('content')
<section class="landing-page d-flex align-items-center justify-content-center text-center"
style="background-image: url('{{ asset('images/youngadults-bg.jpg') }}');">
    <div class="overlay"></div>

    <div class="content position-relative" data-aos="fade-up" data-aos-duration="2000">
        <h1 class="text-white fw-semibold display-4">
            Events
        </h1>
    </div>
</section>

<section class="events-section">
    <div class="container text-center">

        <!-- Services -->
        <div class="events-block">
            <h2 class="events-title">Services</h2>
            <p class="events-text">
                We're excited for you to join us and can't wait to see you!<br>
                Sunday services are at 9:00 &amp; 11:00am.<br>
                &amp; The first Wednesday of the month at 7:00 pm.
            </p>
        </div>

        <!-- Ministry Rooms -->
        <div class="events-block">
            <h2 class="events-title">Ministry Rooms</h2>
        </div>

        <!-- Special Event Sign Ups -->
        <div class="events-block">
            <h2 class="events-title">Special Event Sign Ups</h2>
            <p class="events-text small">
                Mark your calendars and sign up for these very special events!
            </p>

            <p class="events-note">
                Planning Center Events is a Premium Feature. Upgrade to gain access.
            </p>
        </div>

    </div>
</section>


<section class="events-list py-5">
    <div class="container">

        <!-- Heading -->
        <div class="text-center mb-5">
            <h1 class="fw-light events-heading">All Upcoming Events</h1>
            <p class="events-subtitle">
                Explore all that's happening at Rock City and sign up for events below.
            </p>
        </div>



        <!-- Content -->
        <div class="row custom-calendar g-5">

        <!-- Filter -->
        <form method="GET">
            <input type="hidden" name="month" value="{{ $month }}">
            <input type="hidden" name="year" value="{{ $year }}">

            <select id="categoryFilter" class="form-select events-filter w-auto">
                <option>All Categories</option>
                <option>Services</option>
                <option>Groups</option>
                <option>Kids</option>
            </select>
        </form>
            <!-- Calendar -->
            <div class="col-lg-4">
                <div class="calendar-box">
                    <div class="calendar-header d-flex justify-content-between align-items-center">
                        <button id="prevMonth">&lsaquo;</button>
                        <strong id="calendarTitle">{{ $current->format('F Y') }}</strong>
                        <button id="nextMonth">&rsaquo;</button>
                    </div>

                    <div class="calendar-grid">
                        <div class="calendar-days">
                            <span>S</span><span>M</span><span>T</span>
                            <span>W</span><span>T</span><span>F</span><span>S</span>
                        </div>

                        <div class="calendar-dates">
                            @for ($day = 1; $day <= $daysInMonth; $day++)

                            @php
                                $date = \Carbon\Carbon::create($year, $month, $day)->toDateString();
                            @endphp

                                <button 
                                    class="calendar-date"
                                    data-date="{{ $date }}">
                                    {{ $day }}
                                </button>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>

            <!-- Events -->
            <div class="col-lg-8">
                <div id="events-container">
                    @foreach($events as $date => $dayEvents)
                        <div class="events-day mb-4">
                            <h5>{{ \Carbon\Carbon::parse($date)->format('F Y') }}</h5>
                            <small class="text-uppercase">
                                {{ \Carbon\Carbon::parse($date)->format('l, M d') }}
                            </small>
                        
                            @foreach($dayEvents as $event)
                                <div class="event-item">
                                    <h6>{{ $event->title }}</h6>
                                    <p>
                                        {{ \Carbon\Carbon::parse($event->start_time)->format('g:i A') }}
                                        @if($event->end_time)
                                            - {{ \Carbon\Carbon::parse($event->end_time)->format('g:i A') }}
                                        @endif
                                        <br>
                                        {{ $event->description }}
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>


<script>
let currentMonth = {{ $month }};
let currentYear = {{ $year }};
let selectedCategory = "All Categories";

// LOAD EVENTS FUNCTION
function loadEvents(date = null) {

    let url = `/events-data?month=${currentMonth}&year=${currentYear}&category=${selectedCategory}`;

    if (date) {
        url += `&date=${date}`;
    }

    fetch(url)
        .then(res => res.json())
        .then(data => {

            // Update Month Title
            document.getElementById('calendarTitle').innerText = data.month;

            let container = document.getElementById('events-container');
            container.innerHTML = '';

            if (data.events.length === 0) {
                container.innerHTML = '<p>No events found.</p>';
                return;
            }

            data.events.forEach(event => {
                container.innerHTML += `
                    <div class="event-item">
                        <h6>${event.title}</h6>
                        <p>
                            ${event.start_time ?? ''} 
                            ${event.end_time ? ' - ' + event.end_time : ''}
                            <br>
                            ${event.description ?? ''}
                        </p>
                    </div>
                `;
            });
        });
}

// DATE CLICK
document.querySelectorAll('.calendar-date').forEach(btn => {
    btn.addEventListener('click', function () {

        document.querySelectorAll('.calendar-date').forEach(b => b.classList.remove('active'));
        this.classList.add('active');

        let date = this.dataset.date;
        loadEvents(date);
    });
});

// CATEGORY CHANGE
document.getElementById('categoryFilter').addEventListener('change', function () {
    selectedCategory = this.value;
    loadEvents();
});

// PREV MONTH
document.getElementById('prevMonth').addEventListener('click', () => {
    currentMonth--;

    if (currentMonth < 1) {
        currentMonth = 12;
        currentYear--;
    }

    loadEvents();
});

// NEXT MONTH
document.getElementById('nextMonth').addEventListener('click', () => {
    currentMonth++;

    if (currentMonth > 12) {
        currentMonth = 1;
        currentYear++;
    }

    loadEvents();
});

// INITIAL LOAD
loadEvents();
document.querySelectorAll('.calendar-date').forEach(button => {
    button.addEventListener('click', function () {

        let date = this.dataset.date;

        fetch(`/events-by-date?date=${date}`)
            .then(response => response.json())
            .then(data => {

                let container = document.getElementById('events-container');
                container.innerHTML = '';

                if (data.length === 0) {
                    container.innerHTML = '<p>No events for this date.</p>';
                    return;
                }

                let formattedDate = new Date(date).toDateString();
                container.innerHTML += `<h5>${formattedDate}</h5>`;

                data.forEach(event => {
                    container.innerHTML += `
                        <div class="event-item">
                            <h6>${event.title}</h6>
                            <p>
                                ${event.start_time ?? ''} 
                                ${event.end_time ? ' - ' + event.end_time : ''}
                                <br>
                                ${event.description ?? ''}
                            </p>
                        </div>
                    `;
                });

            });
    });
});
document.querySelectorAll('.calendar-date').forEach(btn => {
    btn.addEventListener('click', function () {

        document.querySelectorAll('.calendar-date')
            .forEach(b => b.classList.remove('active'));

        this.classList.add('active');

        let date = this.dataset.date;
        loadEvents(date);
    });
});
</script>
@endsection