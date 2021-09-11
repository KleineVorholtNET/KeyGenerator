function saveKeysToTXTFile(keys = []) {
    let blobContent = '';
    for (let i=0; i<keys.length; i++) {
        blobContent += keys[i] + '\n';
    }
    blobContent = [blobContent];
    let blob = new Blob(blobContent, { type: "text/plain;charset=utf-8" });
    saveAs(blob, "keys.txt");
}