import './App.css';
import Teams from "./pages/Teams";
import React from 'react';
import { BrowserRouter as Router, Route, Routes } from 'react-router-dom'
import CreateTeam from "./pages/CreateTeam";
import EditTeam from "./pages/EditTeam";
import { ToastContainer } from 'react-toastify';
import 'react-toastify/dist/ReactToastify.css';

function App() {
    return (
        <Router>
            <div className="py-4 sm:py-6 lg:py-8">
                <Routes>
                    <Route exact path="/" element={<Teams/>} />
                    <Route exact path="/team" element={<Teams/>} />
                    <Route exact path="/team/list" element={<Teams/>} />
                    <Route exact path="/team/create" element={<CreateTeam/>} />
                    <Route exact path="/team/:id/edit" element={<EditTeam/>} />
                </Routes>
            </div>

            <ToastContainer />
        </Router>
    )
}

export default App;
