function changeCSS() {
    var cssRuleCode = document.all ? 'rules' : 'cssRules';
    var header = document.styleSheets[0][cssRuleCode][1];
    var footer = document.styleSheets[0][cssRuleCode][4];
    var navBar = document.styleSheets[0][cssRuleCode][5];
    header.style.backgroundColor = "#32CD32";
    header.style.color = "#000000";
    footer.style.backgroundColor = "#0000ee";
    footer.style.color = "#ffffff";
    navBar.style.backgroundColor = "#0000EE";
    navBar.style.color = "#FFFFFF";
}

window.onload = changeCSS;
