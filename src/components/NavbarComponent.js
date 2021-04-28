import React from "react";
import {
  BrowserRouter as Router,
  Switch,
  Route,
  useParams,
} from "react-router-dom";
import { Navbar, Nav, NavDropdown, Form, FormControl, Button } from 'react-bootstrap'
import HomeCompoment from './Home';
import LoginComponent from './Login';
import RegisterComponent from './Register';
import ResultComponent from './Result';
import RateComponent from './Rate';
import SearchResultsComponent from './SearchResults';

class NavbarComponent extends React.Component {
  render() {
    return (
      <div>

            <Router>
              <Navbar bg="dark" variant="dark" expand="lg" sticky="top">
                <Navbar.Brand href="/">Rate My Scholar</Navbar.Brand>
                <Navbar.Toggle aria-controls="basic-navbar-nav" />
                <Navbar.Collapse id="basic-navbar-nav">
                  <Nav className="mr-auto">
                    <Nav.Link href="/">Home</Nav.Link>
                    <Nav.Link href="/login">Login</Nav.Link>
                    <Nav.Link href="/register">Register</Nav.Link>
                    {/* <NavDropdown title="Dropdown" id="basic-nav-dropdown">
                      <NavDropdown.Item href="#action/3.1">Action</NavDropdown.Item>
                      <NavDropdown.Item href="#action/3.2">Another action</NavDropdown.Item>
                      <NavDropdown.Item href="#action/3.3">Something</NavDropdown.Item>
                      <NavDropdown.Divider />
                      <NavDropdown.Item href="#action/3.4">Separated link</NavDropdown.Item>
                    </NavDropdown> */}
                  </Nav>
                  <Form inline>
                    <FormControl type="text" placeholder="Search" className="mr-sm-2" />
                    <Button variant="outline-success">Search</Button>
                  </Form>
                </Navbar.Collapse>
              </Navbar>
              <Switch>
                {/* Add the routes and components here to provide links */}
                <Route exact path="/">
                  <HomeCompoment />
                </Route>
                <Route path="/login">
                  <LoginComponent />
                </Route>
                <Route path="/register">
                  <RegisterComponent />
                </Route>
                <Route path="/result">
                  <ResultComponent />
                </Route>
                <Route path="/rate">
                  <RateComponent />
                </Route>
                <Route path="/search/:query" component={SearchResultsComponent} />
              </Switch>
            </Router>
      </div>
    );
  }
};

export default NavbarComponent;