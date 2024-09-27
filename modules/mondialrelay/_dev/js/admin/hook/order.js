$(document).ready(() => {
    if(document.querySelector('#generateMrLabel')){
        document.querySelector('#generateMrLabel').addEventListener('click', (e) => {
            document.querySelector('#generateMrLabel').disabled = true
            console.log( document.querySelector('#generateMrLabel').dataset.relay);
            let params = {
                ajax: true,
                action:  'generateLabel',
                id_mondialrelay_selected_relay: document.querySelector('#generateMrLabel').dataset.relay
            };
    
            $.ajax({
                url: document.querySelector('#mondialrelay-action').value,
                method: 'GET',
                data: params,
                dataType: 'json',
              
                success: response => {
                    console.log(document.querySelector('.mondialrelay-body'));
                    document.querySelector('.mondialrelay-body').insertAdjacentHTML('beforeend',response.responseText);
                },
              
                error: response => {
                    console.log(response.responseText)
                    document.querySelector('.mondialrelay-body').insertAdjacentHTML('beforeend',response.responseText);
                },
            });
        });
    }
});