import React from 'react'
import {Link} from 'react-router-dom';
 const SingleBook = ({id, title,authors, handleDelete}) => {
    return (
    <li className="cards_item">
      <div className="card">
        <div className="card_image">
    <img src={`https://picsum.photos/500/300/?image=${Math.floor(Math.random()*10)}`}/></div>
        <div className="card_content">
          <h2 className="card_title">{title}</h2>
            <p className="card_text">by: {authors}</p>
            <div className="flex_item">
     <button className="btn card_btn">  <Link to={`/book/${id}`} style={{color:"#FFFFFF", textDecoration:"none"}}> Edit</Link>  </button>
          <button className="btn card_btn" onClick={handleDelete}>Delete</button>
          </div>
        </div>
      </div>
    </li>
    )
}

export default SingleBook;