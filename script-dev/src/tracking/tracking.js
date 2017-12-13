import axios from 'axios';
import { setLocal, getLocal } from '../store/storeLocal.js';
import { getRealPathArray, getQuery } from './url.js';

let send = '/slabeste-cu-serban/slabeste-cu-serban-framework/public/tracking/receive';

function run()
{
    // get lp name
    let path = getRealPathArray();
    let program = path[path.length - 1];
    let page = getQuery()['lp'];

    // get options from local store, compare them and send to server
    let options = getLocal('options');

    if(options !== false)
    {
        options = JSON.parse(options);
        let exist = false;
        for(let i = 0; i < options.length; i++)
        {
            if(options[i].page == page && options[i].program == program)
            {
                exist = true;
            }
        }
        if(exist == false)
        {
            options.push({ page: page, program: program });
            console.log(options)
            toServer(options);
        }
    } else {
        toServer({ page: page, program: program })
    }
}

function toServer(payload)
{
    setLocal('options', JSON.stringify(payload));
    axios.post(send, payload).then((response)=> {
        console.log(response);
    }).catch((err)=> {
        console.log(err);
    })
}

export {
    run,
    toServer
};
