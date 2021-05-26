import React, { useState } from "react";
import { useDispatch, useSelector } from "react-redux";
import { LoginAction } from "../redux/actions/AuthActions";
import { useHistory, Link } from "react-router-dom";
function LoginComponent() {
  const history = useHistory();
  //console.log(history);
  const dispatch = useDispatch();
  //const authResponse = useSelector(state=>state.userAuth.authResponse);
  const [fields, setState] = useState({
    email: "",
    password: "",
  });
  const handleFieldChange = (e) => {
    setState({
      ...fields,
      [e.target.id]: e.target.value,
    });
  };
  const UserLogin = (e) => {
    e.preventDefault();
    console.log(fields);
    dispatch(LoginAction(fields, history));
  };
  return (
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 my-4">
                <div class="card">
                    <div class="card-header">ログイン</div>
                    <div class="card-body">
                        <form onSubmit={UserLogin}>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 offset-md-1 offset-md-1 col-form-label text-md-right">Eメールアドレス</label>

                                <div class="col-md-4">
                                    <input id="email" type="email" class="form-control" name="email" value={fields.email} onChange={handleFieldChange} required autocomplete="email"></input>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 offset-md-1 col-form-label text-md-right">パスワード</label>

                                <div class="col-md-4">
                                    <input id="password" type="password" class="form-control" name="password" value={fields.password} onChange={handleFieldChange} required autocomplete="new-password"></input>
                                </div>
                            </div>

                            <div class="form-group row mb-0 text-center">
                                <div class="col-md-4 offset-md-4">
                                    <button class="btn btn-primary">
                                        ログイン
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
export default LoginComponent;
