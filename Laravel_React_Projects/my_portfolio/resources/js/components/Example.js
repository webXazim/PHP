import React from 'react';
import ReactDOM from 'react-dom';

function Portfolio() {
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">Portfolio
                     Component</div>

                        <div className="card-body">I'm an example component!</div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Portfolio;

if (document.getElementById('example')) {
    ReactDOM.render(<Portfolio />, document.getElementById('example'));
}
