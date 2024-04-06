let fileInput = document.getElementById('file_input');
let fileList = document.getElementById('file_list');
let noOfFiles = document.getElementById('no_of_files');

fileInput.addEventListener('change', function(){
    fileList.innerHTML = '';
    noOfFiles.textContent = `${fileInput.files.length} Files Selected`;

    for (i of fileInput.files){
    
        let reader = new FileReader();
        let listItem = document.createElement('li');
        let fileName = i.name;
        let fileSize = (i.size / 1024).toFixed(1);

        listItem.innerHTML = `<p>${fileName}</p><p>${fileSize} KB</p>`;
            if(fileSize >= 1024) {
                fileSize = (fileSize / 1024).toFixed(1);
                listItem.innerHTML = `<p>${fileName}</p><p>${fileSize} MB</p>`;
            }
        fileList.appendChild(listItem);
    }
});