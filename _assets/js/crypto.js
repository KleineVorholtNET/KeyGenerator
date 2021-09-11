// Define chars & digits
const lowerCaseString = 'abcdefghijklmnopqrstuvwxyz';
const upperCaseString = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
const numbersString = '1234567890';
const specialString = '`~!@#$%^&*()-=_+[]{}|;\':",./<>?';
const hexString = '123456789ABCDEF';

/**
 * Generate some randomness
 * @returns {number} Random number
 */
function random() {
    const { crypto, Uint32Array } = window;
    if (typeof crypto?.getRandomValues === 'function' && typeof Uint32Array === 'function') {
        return window.crypto.getRandomValues(new Uint32Array(1))[0] / 4294967295;
    }
    return Math.random();
}

/**
 * Generates a random string
 * @param length Length of String
 * @param lowerCase Should lowercase letters included
 * @param upperCase Should uppercase letters included
 * @param numbers Should numbers included
 * @param special Should special letters inlcuded
 * @param hex Should hex chars included
 * @returns {string} random string
 */
function generateKey(length, lowerCase, upperCase, numbers, special, hex) {
    // Initialize variables
    let letters = '';
        let key = '';

    if (upperCase && hex) throw Error('A String can not be generated with uppercase & hex letters at same time!');

    // Check requirements
    if (lowerCase) letters += lowerCaseString;
    if (upperCase) letters += upperCaseString;
    if (numbers) letters += numbersString;
    if (special) letters += specialString;
    if (hex) letters += hexString;

    // Build Key
    for (let i = 0; i < length; i++) {
        key += letters[Math.floor(random() * letters.length)];
    }

    // Return key
    return key;
}

/**
 * Gets a random String of different types
 * @param type Type of string
 * @returns {string} String
 */
function getKeyType(type) {

    switch (type) {
        case 'rememberable_password':
            return generateKey(10, true, true, true, false, false);
        case 'strong_password':
            return generateKey(15, true, true, true, true, false);
        case 'ultrastrong_password':
            return generateKey(30, true, true, true, true, false);
        case 'long_license_key':
            return generateKey(5, false, true, true, false) + '-' + generateKey(5, false, true, true, false) + '-' + generateKey(5, false, true, true, false) + '-' + generateKey(5, false, true, true, false) + '-' + generateKey(5, false, true, true, false);
        case 'short_license_key':
            return generateKey(5, false, true, true, false) + '-' + generateKey(5, false, true, true, false) + '-' + generateKey(5, false, true, true, false);
        default:
            throw Error('Type ' + type + ' does not exist!');
    }
}