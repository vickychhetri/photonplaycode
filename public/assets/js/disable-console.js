console.log = function() {};
console.error = function() {};
console.warn = function() {};
window.onerror = function(message, source, lineno, colno, error) {
    return true;
};
