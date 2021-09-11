function downloadKeys() {
    saveKeysToTXTFile([
        "Keys generated by Kleine-Vorholt.NET Key Generator. (c) 2021 Kleine-Vorholt.NET\nVisit: https://key-generator.kleine-vorholt.eu/\n",
        "Rememberable Passwords:",
        document.getElementById('rememberable_password_0').getAttribute('key'),
        document.getElementById('rememberable_password_1').getAttribute('key'),
        document.getElementById('rememberable_password_2').getAttribute('key'),
        document.getElementById('rememberable_password_3').getAttribute('key'),
        document.getElementById('rememberable_password_4').getAttribute('key'),
        document.getElementById('rememberable_password_5').getAttribute('key'),
        "",
        "Strong Passwords:",
        document.getElementById('strong_password_0').getAttribute('key'),
        document.getElementById('strong_password_1').getAttribute('key'),
        document.getElementById('strong_password_2').getAttribute('key'),
        document.getElementById('strong_password_3').getAttribute('key'),
        document.getElementById('strong_password_4').getAttribute('key'),
        document.getElementById('strong_password_5').getAttribute('key'),
        "",
        "Ultra Strong Passwords:",
        document.getElementById('ultrastrong_password_0').getAttribute('key'),
        document.getElementById('ultrastrong_password_1').getAttribute('key'),
        document.getElementById('ultrastrong_password_2').getAttribute('key'),
        document.getElementById('ultrastrong_password_3').getAttribute('key'),
        "",
        "License Keys:",
        document.getElementById('license_key_0').getAttribute('key'),
        document.getElementById('license_key_1').getAttribute('key'),
        document.getElementById('license_key_2').getAttribute('key'),
        document.getElementById('license_key_3').getAttribute('key'),
    ]);
}

function setKey(span, key) {
    let keyspan = document.getElementById(span);
    keyspan.innerText = key;
    keyspan.setAttribute('key', key);
}

function generateLicenseKeys() {
    setKey('license_key_0', getKeyType('long_license_key'));
    setKey('license_key_1', getKeyType('long_license_key'));
    setKey('license_key_2', getKeyType('long_license_key'));
    setKey('license_key_3', getKeyType('long_license_key'));
}

function generateRememberablePasswords() {
    setKey('rememberable_password_0', getKeyType('rememberable_password'));
    setKey('rememberable_password_1', getKeyType('rememberable_password'));
    setKey('rememberable_password_2', getKeyType('rememberable_password'));
    setKey('rememberable_password_3', getKeyType('rememberable_password'));
    setKey('rememberable_password_4', getKeyType('rememberable_password'));
    setKey('rememberable_password_5', getKeyType('rememberable_password'));
}

function generateStrongPasswords() {
    setKey('strong_password_0', getKeyType('strong_password'));
    setKey('strong_password_1', getKeyType('strong_password'));
    setKey('strong_password_2', getKeyType('strong_password'));
    setKey('strong_password_3', getKeyType('strong_password'));
    setKey('strong_password_4', getKeyType('strong_password'));
    setKey('strong_password_5', getKeyType('strong_password'));
}

function generateUltraStrongPasswords() {
    setKey('ultrastrong_password_0', getKeyType('ultrastrong_password'));
    setKey('ultrastrong_password_1', getKeyType('ultrastrong_password'));
    setKey('ultrastrong_password_2', getKeyType('ultrastrong_password'));
    setKey('ultrastrong_password_3', getKeyType('ultrastrong_password'));
}

function generateKeys() {
    window.scrollTo(0,0);
    generateLicenseKeys();
    generateRememberablePasswords();
    generateStrongPasswords();
    generateUltraStrongPasswords();
}