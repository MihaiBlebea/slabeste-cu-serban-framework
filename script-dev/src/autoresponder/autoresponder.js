import axios from 'axios';
import { showForm,
    hideForm,
    showLoading,
    hideLoading,
    showError,
    hideError } from '../manipulate/form.js';

function addSubscriber(event)
{
    event.preventDefault();
    let payload = {
        name: event.target.form.elements.name.value,
        email: event.target.form.elements.email.value,
        redirect: event.target.form.dataset.redirect,
        automation: event.target.form.dataset.automation,
        list: event.target.form.dataset.list,
        tag: event.target.form.dataset.tag
    };

    let query = event.target.form.dataset.query;
    let redirect = event.target.form.dataset.redirect;
    let post = event.target.form.dataset.post;

    hideForm();
    showLoading();

    axios.post(post, payload).then((response)=>{
        if(response.data.response == true)
        {
            window.location.href = (query !== undefined) ? redirect + query : redirect;
        } else {
            showError();
            showForm();
            hideLoading();
        }
    }).catch((err)=> {
        console.log(err)
    })
}

export {
    addSubscriber
}
