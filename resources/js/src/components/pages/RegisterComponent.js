import React, { useState } from "react";
import { Link } from "react-router-dom";
import { useDispatch, useSelector } from "react-redux";
import { RegisterAction } from "../redux/actions/AuthActions";
function RegisterComponent() {
  const dispatch = useDispatch();
  //const authResponse = useSelector(state=>state.userAuth.authResponse);
  const [fields, setState] = useState({
    name: "",
    email: "",
    password: "",
    password_confirmation: "",
  });
  const handleFieldChange = (e) => {
    setState({
      ...fields,
      [e.target.id]: e.target.value,
    });
  };
  const UserRegister = (e) => {
    e.preventDefault();
    console.log(fields);
    const passwordMatch = checkPasswordMatch(
      fields.password,
      fields.password_confirmation
    );
    if (passwordMatch === true) {
      alert("passwords dont match. please check your password again");
      return;
    }
    dispatch(RegisterAction(fields));
  };
  const checkPasswordMatch = (password, password_confirmation) => {
    return password !== password_confirmation ? true : false;
  };
  return (
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 my-4">
                <div class="card">
                    <div class="card-header">登録</div>
                    <div class="card-body">
                        <form onSubmit={UserRegister}>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 offset-md-1 col-form-label text-md-right">名前</label>

                                <div class="col-md-4">
                                    <input id="name" type="text" class="form-control" name="name" value={fields.name} onChange={handleFieldChange} required autocomplete="name" autofocus></input>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 offset-md-1 offset-md-1 col-form-label text-md-right">Eメールアドレス</label>

                                <div class="col-md-4">
                                    <input id="email" type="email" class="form-control" name="email" value={fields.email} onChange={handleFieldChange} required autocomplete="email"></input>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="prefecture" class="col-md-4 offset-md-1 col-form-label text-md-right">都道府県</label>

                                <div class="col-md-4">
                                    <input id="prefecture" type="prefecture" class="form-control" name="prefecture" value={fields.prefecture} onChange={handleFieldChange} required autocomplete="prefecture"></input>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address1" class="col-md-4 offset-md-1 col-form-label text-md-right">市区町村</label>

                                <div class="col-md-4">
                                    <input id="address1" type="address1" class="form-control" name="address1" value={fields.address1} onChange={handleFieldChange} required autocomplete="address1"></input>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address2" class="col-md-4 offset-md-1 col-form-label text-md-right">町名</label>

                                <div class="col-md-4">
                                    <input id="address2" type="address2" class="form-control" name="address2" value={fields.address2} onChange={handleFieldChange} required autocomplete="address2"></input>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address3" class="col-md-4 offset-md-1 col-form-label text-md-right">番地・部屋番号</label>

                                <div class="col-md-4">
                                    <input id="address3" type="address3" class="form-control" name="address3" value={fields.address3} onChange={handleFieldChange} required autocomplete="address3"></input>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="phone" class="col-md-4 offset-md-1 col-form-label text-md-right">電話番号</label>

                                <div class="col-md-4">
                                    <input id="phone" type="phone" class="form-control" name="phone" value={fields.phone} onChange={handleFieldChange} required autocomplete="phone"></input>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 offset-md-1 col-form-label text-md-right">パスワード</label>

                                <div class="col-md-4">
                                    <input id="password" type="password" class="form-control" name="password" value={fields.password} onChange={handleFieldChange} required autocomplete="new-password"></input>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 offset-md-1 col-form-label text-md-right">パスワード確認</label>

                                <div class="col-md-4">
                                    <input id="password_confirmation" type="password" class="form-control" value={fields.password_confirmation} onChange={handleFieldChange} name="password_confirmation" required autocomplete="new-password"></input>
                                </div>
                            </div>

                            <div class="form-group row mb-0 text-center">
                                <div class="col-md-4 offset-md-4">
                                    <button class="btn btn-primary">
                                        登録
                                    </button>
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
export default RegisterComponent;
