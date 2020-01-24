import React, {useState, useEffect} from 'react';
import axios from "axios";
import SingleBook from './SingleBook'
import Loader from './Loader'
const Home = () => {
    const [books, setBooks] = useState(null)
    const [deleteAlert, setDeleteAlert] = useState(null)
    const getBooks = async()=>{
        const response = await axios.get('/api/v1/books');
        setBooks(response.data.data)
    }
    const AvailableBooks = [];

    if(deleteAlert){
        setTimeout(()=>{
            setDeleteAlert(null)
        },3000)
    }

    const deletePost = async id => {
        const deleteResponse = await axios.delete(`/api/v1/books/${id}`);
        if(deleteResponse.data.status_code == 204){
            setDeleteAlert(deleteResponse.data)
            books.map(book=>{
                 if(book.id != id){
                    AvailableBooks.push(book);  
                 }
            });
            setBooks(AvailableBooks);
        }
    }
    useEffect(() => {
      getBooks();
    }, [])
    return (
        <div className="container">
           <h1>This is Westeros</h1>

        <div className="main">
    {deleteAlert ? (<div className="alert alert-success">{deleteAlert.message}</div>) : "" }
            <ul className="cards">
                {books
                ? 
                books.map(book=>(
                    <SingleBook  key={book.id} id={book.id} title={book.name} authors={book.authors['0']} handleDelete={()=>deletePost(book.id)}/>
                ))
            :
            <Loader/>

            }
                
             
            </ul>
        </div>
        </div>
    );
}

export default Home;
