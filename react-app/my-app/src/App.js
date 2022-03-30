import logo from './logo.svg';
import './App.css';
import React from "react";
import {Login} from "./Login.js";
import {Layout} from "./Layout.js";
import { Register } from './Register';

import {
  useState,
  initialState,
} from "react";

import {
  BrowserRouter as Router,
  Routes,
  Route,
  Link,
  useRouteMatch,
  useParams
} from "react-router-dom";



function App() {
  return (
    <Router>
      <Routes>
          <Route path="/login" element={<Login/>}/>
          <Route path="/projects" element={<Projects/>}/>
          <Route path="/" element={<Home/>}/>
          <Route path="/register" element={<Register/>}/>
          <Route path="*" element={<NotFound/>}/>
        </Routes>
    </Router>
  );
}

function Home(props) {
  return (
    <Layout>
      <h1 className=''>Home</h1>
    </Layout>
  );
}

function Projects() {
  return "hello";
}

function NotFound() {
  return "404 not found";
}

export default App;
