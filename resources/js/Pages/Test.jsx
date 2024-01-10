import React, { useState } from 'react';

const Test = () => {
    const [data,setData]=useState(null);
    alert(data)
    return (
        <h1>Test Component</h1>
    )
}

export default Test
