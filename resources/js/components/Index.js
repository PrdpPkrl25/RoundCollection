import React from 'react';
import ReactDOM from 'react-dom';
import Navbar from "./navbar";

function Index() {
    return (
        <Navbar/>
    );
}

export default Index;

if (document.getElementById('root')) {
    ReactDOM.render(<Index />, document.getElementById('root'));
}
