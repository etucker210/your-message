<?php header("Content-type: text/css; charset: UTF-8"); ?>

body {
  margin-bottom: 50px;
}

header {
  background-color: #32CD32;
  color: #fff;
}

article {
  text-align: left;
}

article h1 a{
  text-decoration: underline;
  color: #000;
}

footer {
  background-color: #999;
  color: #000;
  margin-bottom: 0px;
  bottom: 0px;
  left: 0px;
  right: 0px;
  height: 50px;
  position: fixed;
}

nav {
  background-color: #888;
}

nav ul {
  list-style-type: none;
  padding: 0;
}

nav ul li {
  float: left;
}
nav ul li a {
  display: block;
  color: white;
  text-align: center;
  padding: 20px;
  text-decoration: none;
}

nav ul li a:hover {
  background-color: #777;
}

.on {
  background-color: #555;
}

.error {
  color: red;
}

.flex-container {
  display: -webkit-flex;
  display: flex;
  -webkit-flex-direction: column;
  flex-direction: column;
  text-align: center;
}
.flex-item {
  padding: 20px;
  -webkit-flex: 1 100%;
  flex: 1 100%;
}

.mainBox {
  width: 100%;
}

.mainBoxHead {
  background-color: #000;
  color: #fff;
  margin: 1%;
  padding: .5%;
  text-align: left;
}

.contentBox {
  color: #000;
  margin: 1%;
  padding: .5%;
  width: 97%;
  display: flex;
  flex-direction: row;
}

.CBLab {
  color: #000;
  margin: 0;
  margin-left: 5%;
  width: 10%;
  text-align: left;
}

.CBCon {
  color: #000;
  margin: 0;
  margin-left: 1%;
  width: 90%;
  text-align: left;
}
