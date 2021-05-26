import {
    combineReducers
} from 'redux';
import AuthReducer from './AuthReducer';
import ProfileReducer from "./ProfileReducer";
import * as ActionTypes from '../../ActionTypes';

const appReducer = combineReducers({
    userAuth: AuthReducer,
    userDetails: ProfileReducer,
});

const RootReducer = (state, action) => {

    return appReducer(state, action);
  };

  export default RootReducer;