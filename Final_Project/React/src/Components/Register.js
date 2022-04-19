import React,{useState,useEffect} from "react"
import {useHistory} from "react-router-dom";
import Header from './NavBar'

function Register(){

    useEffect(()=>{
        if(localStorage.getItem('user-info')){
                history.push('/add')
        }
    },[])

    const [Name,setName]=useState("")
    const [Password,setPassword]=useState("")
    const [Email,setEmail]=useState("")
    const [Phone,setPhone]=useState("")
    const [Address,setAddress]=useState("")
    const history=useHistory();


    async function signUp(){
            let item={Name,Email,Password,Phone,Address}
            console.warn(item)

            let result = await fetch("http://127.0.0.1:8000/api/registercustomer",{
                method: 'POST',
                body:JSON.stringify(item),
                headers:{
                    "Content-Type":'application/json',
                    "Accept":'application/json'
                }
            })

            result=await result.json()
            console.warn("result",result)
            localStorage.setItem("user-info",JSON.stringify(result))
            history.push("/add")
    }

    return(        
       
            <>
            <Header/>
            <div className="col-sm-6 offset-sm-3">
                <h1 align="center">Register Page</h1>
                <input type="text" value={Name} onChange={(e)=>setName(e.target.value)} className="form-control" placeholder="Enter your name" />
                <br />
                <br />
                <input type="text" value={Email} onChange={(e)=>setEmail(e.target.value)} className="form-control" placeholder="Enter your email" />
                <br />
                <br />
                <input type="password" value={Password} onChange={(e)=>setPassword(e.target.value)} className="form-control" placeholder="Enter your password" />
                <br />
                <br />
                <input type="text" value={Phone} onChange={(e)=>setPhone(e.target.value)} className="form-control" placeholder="Enter your Phone" />
                <br />
                <br />
                <input type="text" value={Address} onChange={(e)=>setAddress(e.target.value)} className="form-control" placeholder="Enter your Address" />
                <br />
                <br />
                <button onClick={signUp} className="btn btn-primary">Sign Up</button>
            </div>
            </>
       
    )

}
export default Register