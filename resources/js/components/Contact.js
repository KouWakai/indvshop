import axios from 'axios';
import React, { useEffect, useState } from 'react';
import ReactDOM from 'react-dom';
import {
    BrowserRouter as Router,
    Switch,
    Route,
    useHistory
  } from "react-router-dom";

function Contact() {
    const [username, setUsername]=useState('');
    const [email, setEmail]=useState('');
    const [description, setDescription]=useState('');
    const history = useHistory();

    const handleSubmit = e =>{
        e.preventDefault();

        const contact = {
            username:  username,
            email:  email,
            description:  description,
        };
        axios.post('/contact', contact)
            .then(
                history.push(`/contactsuccess`)
                )
            .catch(error => {
                console.log("ERROR:: ",error.response.data);
                });
    }

    return (
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 my-4">
                    <div class="card">
                        <div class="card-header">
                            <h5>お問い合わせ</h5>
                        </div>

                        <div class="card-body px-5">
                            <form>
                                <div class="mx-3 px-5">
                                    <div class="form-group">
                                        <label for="username">お名前</label>
                                            <input id="username" type="username" class="form-control" name="username" value={username} onChange={(e) => setUsername(e.target.value)} required autocomplete="username"/>

                                                <span class="invalid-feedback" role="alert">
                                                    <strong></strong>
                                                </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Eメールアドレス</label>
                                            <input id="email" type="email" class="form-control" name="email" value={email} onChange={(e) => setEmail(e.target.value)}required autocomplete="email"/>

                                                <span class="invalid-feedback" role="alert">
                                                    <strong></strong>
                                                </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">お問い合わせ内容</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" value={description} onChange={(e) => setDescription(e.target.value)}></textarea>

                                                <span class="invalid-feedback" role="alert">
                                                    <strong></strong>
                                                </span>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-5">
                                            <button type="submit" class="btn btn-primary" onClick={handleSubmit}>
                                                送信
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Contact;
