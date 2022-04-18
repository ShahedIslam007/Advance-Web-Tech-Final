import React, { useState } from 'react';
import NavBar from './NavBar';
import StudentCard from './StudentCard';
import StudentData from './StudentData';

const StudentList = () => {
    const [students, setStudents] = useState(StudentData);
    console.log(setStudents);
    return (
        <div className="container">
            <NavBar />
            <h1>Customer List</h1>
            <div className="row">
            {
                    students.map(students => <StudentCard studentDetails={students}></StudentCard>)
                }
            </div>
               
              
               
            

        </div>
    );
};

export default StudentList;