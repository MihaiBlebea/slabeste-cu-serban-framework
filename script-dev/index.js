import Validator from './src/validate/validator.class.js';

function isWorking()
{
    return 'Mihai is set and working';
}

function validateName(event)
{
    let val = new Validator();
    console.log(val);
    console.log(event.target.value)
    let value = event.target.value;

    let result = val.value(value).rules({
        required: true,
        type: 'string',
        length: {
            min: 3,
            max: 25
        },
    });
    return result;
}

export {
    isWorking,
    validateName
}
