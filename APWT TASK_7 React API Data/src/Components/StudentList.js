import React from 'react';
import Header from './NavBar';
import { Table } from 'react-bootstrap'

const StudentList = () => {
    return (
        <div>
            <Header />
            <h1 align="center">Course List</h1>
            <div className="col-sm-6 offset-sm-3">
                <Table>
                    <tr>
                        <td>Name</td>
                        <td>Phone</td>
                        <td>Email</td>
                        <td>Address</td>
                    </tr>

                    <tr>
                        <td>Shahed Islam</td>
                        <td>01821800405</td>
                        <td>shahedislam600@gmail.com</td>
                        <td>Dhaka</td>
                    </tr>

                    <tr>
                        <td>Muminul Islam</td>
                        <td>01716851744</td>
                        <td>19-39968-1@student.aiub.edu</td>
                        <td>46/2, Banagram R/A, Manikganj</td>
                    </tr>



                </Table>
            </div>



        </div>


    );
};

export default StudentList;