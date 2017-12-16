import validator from 'validator';
import scrollMonitor from 'scrollMonitor';
import { disableButton,
    enableButton,
    showForm,
    hideForm,
    showLoading,
    hideLoading,
    showError,
    hideError } from './src/manipulate/form.js';
import { validateName, validateEmail } from './src/validate/validate.js';
import { setLocal, getLocal, removeLocal } from './src/store/storeLocal.js';
import { getQuery,
    getRoot,
    getPathString,
    getPathArray,
    getRealPathArray } from './src/tracking/url.js';
import { addSubscriber } from './src/autoresponder/autoresponder.js';

function isWorking()
{
    let message = 'Landing Page bundle is set and working';
    console.log(message)
    return message;
}
isWorking();

function isInView(id, callback)
{
    let item = document.getElementById(id);
    let elementWatcher = scrollMonitor.create(item);
    elementWatcher.enterViewport(function() {
        console.log( 'I have entered the viewport' );
        callback(item);
    });
}

export {
    setLocal,
    getLocal,
    removeLocal,
    isWorking,
    disableButton,
    enableButton,
    showForm,
    hideForm,
    showLoading,
    hideLoading,
    showError,
    hideError,
    validateName,
    validateEmail,
    getQuery,
    getRoot,
    getPathString,
    getPathArray,
    getRealPathArray,
    isInView,
    addSubscriber
}
