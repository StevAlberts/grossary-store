import React from 'react';
import ReactDOM from 'react-dom';

function Feedback() {
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">Example Component</div>
                        <div className="card-body">I'm an example component!</div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Feedback;

if (document.getElementById('feedback')) {
    ReactDOM.render(<Feedback />, document.getElementById('feedback'));
}
