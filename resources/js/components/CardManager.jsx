import React, { useEffect, useState } from "react";

export default function CardManager() {
    const [cards, setCards] = useState([]);
    const [selectedCard, setSelectedCard] = useState(null);
    const [showEdit, setShowEdit] = useState(false);

    // ✅ FIX 1: ADD MISSING STATES
    const [showAddElders, setShowAddElders] = useState(false);

    const [form, setForm] = useState({
        title: "",
        description: "",
        image: null,
        preview: ""
    });

    const [addForm, setAddForm] = useState({
        title: "",
        description: "",
        image: null
    });

    // FETCH DATA
    useEffect(() => {
        fetch("/api/cards")
            .then(res => res.json())
            .then(data => setCards(data));
    }, []);

    // FILTER
    const elders = cards.filter(c => c.type === "elders");
    const leaders = cards.filter(c => c.type === "leaders");

    // OPEN EDIT
    const handleEdit = (card) => {
        setSelectedCard(card);
        setForm({
            title: card.title,
            description: card.description,
            preview: `/storage/${card.image}`,
            image: null
        });
        setShowEdit(true);
    };

    // IMAGE CHANGE (EDIT)
    const handleImageChange = (e) => {
        const file = e.target.files[0];
        if (file) {
            setForm({
                ...form,
                image: file,
                preview: URL.createObjectURL(file)
            });
        }
    };

    // DELETE
    const deleteCard = () => {
        if (!selectedCard) return;

        fetch(`/api/cards/${selectedCard.id}`, {
            method: "DELETE"
        }).then(() => {
            setCards(cards.filter(c => c.id !== selectedCard.id));
            setShowEdit(false);
        });
    };

    // ================= UI =================
    return (
        <div className="container py-4">

            {/* ================= ELDERS ================= */}
            <h2>Elders Card Manager</h2>

            <button
                className="btn btn-primary mb-3"
                onClick={() => setShowAddElders(true)}
            >
                Add New Elders Card
            </button>

            <div className="row g-3">
                {elders.map(card => (
                    <div className="col-md-2" key={card.id}>
                        <div
                            onClick={() => handleEdit(card)}
                            style={{
                                padding: "10px",
                                border: "1px solid #ddd",
                                borderRadius: "10px",
                                textAlign: "center",
                                cursor: "pointer"
                            }}
                        >
                            <img
                                src={`/storage/${card.image}`}
                                style={{
                                    width: "100%",
                                    height: "150px",
                                    objectFit: "cover"
                                }}
                            />
                            <h5>{card.title}</h5>
                            <p>{card.description}</p>
                        </div>
                    </div>
                ))}
            </div>

            <hr />

            {/* ================= LEADERS ================= */}
            <h2>Leaders Card Manager</h2>

            <div className="row g-3">
                {leaders.map(card => (
                    <div className="col-md-2" key={card.id}>
                        <div
                            onClick={() => handleEdit(card)}
                            style={{
                                padding: "10px",
                                border: "1px solid #ddd",
                                borderRadius: "10px",
                                textAlign: "center",
                                cursor: "pointer"
                            }}
                        >
                            <img
                                src={`/storage/${card.image}`}
                                style={{
                                    width: "100%",
                                    height: "150px",
                                    objectFit: "cover"
                                }}
                            />
                            <h5>{card.title}</h5>
                            <p>{card.description}</p>
                        </div>
                    </div>
                ))}
            </div>

            {/* ================= ADD MODAL ================= */}
            {showAddElders && (
                <div style={overlayStyle}>
                    <div style={modalStyle}>
                        <h4>Add Elders Card</h4>

                        <input
                            className="form-control mt-2"
                            placeholder="Title"
                            onChange={(e) =>
                                setAddForm({ ...addForm, title: e.target.value })
                            }
                        />

                        <textarea
                            className="form-control mt-2"
                            placeholder="Description"
                            onChange={(e) =>
                                setAddForm({ ...addForm, description: e.target.value })
                            }
                        />

                        <input
                            type="file"
                            className="form-control mt-2"
                            onChange={(e) =>
                                setAddForm({ ...addForm, image: e.target.files[0] })
                            }
                        />

                        <button className="btn btn-primary w-100 mt-3">
                            Save
                        </button>

                        <button
                            className="btn btn-secondary w-100 mt-2"
                            onClick={() => setShowAddElders(false)}
                        >
                            Close
                        </button>
                    </div>
                </div>
            )}

            {/* ================= EDIT MODAL ================= */}
            {showEdit && selectedCard && (
                <div style={overlayStyle}>
                    <div style={modalStyle}>

                        <h4>Edit Card</h4>

                        <img
                            src={form.preview}
                            style={{
                                width: "120px",
                                height: "150px",
                                objectFit: "cover"
                            }}
                        />

                        <input type="file" onChange={handleImageChange} />

                        <input
                            className="form-control mt-2"
                            value={form.title}
                            onChange={(e) =>
                                setForm({ ...form, title: e.target.value })
                            }
                        />

                        <textarea
                            className="form-control mt-2"
                            value={form.description}
                            onChange={(e) =>
                                setForm({ ...form, description: e.target.value })
                            }
                        />

                        <div className="row mt-3">
                            <div className="col-6">
                                <button
                                    onClick={deleteCard}
                                    className="btn btn-danger w-100"
                                >
                                    Delete
                                </button>
                            </div>

                            <div className="col-6">
                                <button className="btn btn-primary w-100">
                                    Save
                                </button>
                            </div>
                        </div>

                        <button
                            className="btn btn-secondary mt-2 w-100"
                            onClick={() => setShowEdit(false)}
                        >
                            Close
                        </button>

                    </div>
                </div>
            )}
        </div>
    );
}

// ================= STYLES =================
const overlayStyle = {
    position: "fixed",
    top: 0,
    left: 0,
    width: "100%",
    height: "100%",
    background: "rgba(0,0,0,0.5)",
    display: "flex",
    justifyContent: "center",
    alignItems: "center",
    zIndex: 9999
};

const modalStyle = {
    background: "white",
    padding: "20px",
    width: "400px",
    borderRadius: "10px"
};