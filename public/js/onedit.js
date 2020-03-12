function editObject($objectID){
    let form = document.createElement('form');
    document.body.appendChild(form);
    form.method = 'post';
    form.action = 'editorder';
    let input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'objectID';
        input.value = objectID;
        form.appendChild(input);
        form.submit();
}