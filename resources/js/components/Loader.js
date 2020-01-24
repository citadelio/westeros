import React from 'react'

 const Loader = () => {
    return (
    <li className="cards_item">
      <div className="card">
        <div className="card_image">
    <div style={{height:200, minWidth:300, maxWidth:500, backgroundColor:"#b5bcc3"}}></div>
    </div>
        <div className="card_content">
          <h2 className="card_title">Loading...</h2>
            <p className="card_text"></p>
            <div className="flex_item">
          <button className="btn card_btn"></button>
          <button className="btn card_btn"></button>
          </div>
        </div>
      </div>
    </li>
    )
}

export default Loader;