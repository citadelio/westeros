import React , {useState, useEffect} from 'react'
import axios from "axios";
import {Link} from "react-router-dom";
const EditBook = ({match}) => {
let bookid = match.params.id;
const [formData, setFormData] = useState({
    name: "",
    isbn: "",
    authors:"",
    number_of_pages: "",
    publisher: "",
    country: "",
    release_date: "",
})
const [updateAlert, setUpdateAlert] = useState(null)

if(updateAlert){
    setTimeout(()=>{
        setUpdateAlert(null)
    },3000)
}
const getThisBook = async id => {
    const response = await axios.get(`/api/v1/books/${id}`);
// console.log(response.data);
    if(response.data.status_code == 200){
        const { name, isbn, number_of_pages, publisher, country, release_date} = response.data.data
        setFormData({
            ...formData, 
            name, isbn, number_of_pages, publisher, country, release_date, authors: response.data.data.authors['0']
         } )
    }
}

const handleChange = (e) => {
    setFormData({
        ...formData,
        [e.target.name]: e.target.value
    })
}

const handleSubmit = async(e)=> {
    e.preventDefault();
    const response = await axios.post(`/api/v1/books/${bookid}`, formData, {
        headers:{
            "Content-Type": "application/json"
        }
    })

    if(response.data.status_code == 200){
        setUpdateAlert(response.data)
    }
}
    useEffect(() => {
     getThisBook(bookid)
    }, [])
    return (
        <div>
<h1 className="title">{formData.name}</h1>
<Link to="/"><u>Go Back</u></Link>
<form onSubmit={handleSubmit}>
{updateAlert ? (<div className="alert alert-success">{updateAlert.message}</div>) : "" }
  <div className="form-group">
    <label htmlFor="name">Name</label>
    <input type="text" className="form-control" value={formData.name} onChange={handleChange} id="name" name="name" placeholder="Name"/>
  </div>

  <div className="form-group">
    <label htmlFor="isbn">ISBN</label>
    <input type="text" className="form-control" id="isbn" value={formData.isbn} onChange={handleChange}  name="isbn" placeholder="ISBN"/>
  </div>


  <div className="form-group">
    <label htmlFor="authors">Author</label>
    <input type="text" className="form-control" id="authors" value={formData.authors} onChange={handleChange}  name="authors" placeholder="Author"/>
  </div>

  <div className="form-group">
    <label htmlFor="number_of_pages">Number of Pages</label>
    <input type="number" className="form-control" value={formData.number_of_pages} onChange={handleChange}  id="number_of_pages" name="number_of_pages" placeholder="ISBN"/>
  </div>


  <div className="form-group">
    <label htmlFor="publisher">Publisher</label>
    <input type="text" className="form-control"  value={formData.publisher} onChange={handleChange} id="publisher" name="publisher" placeholder="Publisher"/>
  </div>

  <div className="form-group">
    <label htmlFor="release_date">Release date</label>
    <input type="date" className="form-control" value={formData.release_date} onChange={handleChange}  id="release_date" name="release_date" placeholder="Release date"/>
  </div>

  <div className="form-group">
  <button style={{backgroundColor:"#6cb2eb"}} type="submit" className="btn btn-info">Update</button>
  </div>
</form>
        </div>
    )
}


export default EditBook;