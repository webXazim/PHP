import React from 'react';
import ReactDOM from 'react-dom';

function Feedback() {
    return (
        <div className="container mt-5">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">Feedback
                            Component</div>

                        <div className="card-body">I'm an report component!</div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Feedback;

if (document.getElementById('report')) {
    ReactDOM.render(<Feedback />, document.getElementById('report'));
}
