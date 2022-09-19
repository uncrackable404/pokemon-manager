import axios from 'axios';
import {toast} from "react-toastify";

const instance = axios.create({
    baseURL: process.env.REACT_APP_BACKEND_ENDPOINT
});

instance.interceptors.response.use(response => response, response => {
    response.response.data.errors.forEach(error => {
        toast.error(error.message);
    });
});

export default instance
