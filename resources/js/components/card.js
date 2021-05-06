import React from 'react';
import ReactDOM from 'react-dom';

function Card() {


    return (
        <div className="container">
            <div class="rounded overflow-hidden shadow-lg">
                    <div class="px-6 py-4 flex flex-row justify-between">
                        <div class="pr-1">
                            <p class="text-gray-700 text-xl">Food</p>
                            <div class="font-bold text-xl mb-2">Ksh 200</div>
                        </div>
                        <button   class="bg-transparent hover:bg-yellow-500 text-yellow-500 font-semibold hover:text-white py-2 px-4 border border-orange-500 hover:border-transparent rounded">
                            BUY
                        </button>
                    </div>
            </div>
        </div>
    );
}

export default Card;

if (document.getElementById('card')) {
    ReactDOM.render(<Card />, document.getElementById('card'));
}
