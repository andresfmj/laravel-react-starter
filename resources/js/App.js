import React, { Component } from 'react';
import { render } from 'react-dom';

import { BrowserRouter as Router, Route, Switch, Redirect } from 'react-router-dom';

import Layout from './UI/Layout'
import Example from './components/Example'


export default class App extends Component {

    componentDidMount() {
        console.info('[App] didMounted!')
    }

    render() {
        return (
            <Layout>
                <Switch>
                    <Route exact path='/' component={Example} />
                    <Route render={() => <h3>404 Recurso no encontrado</h3>} />
                </Switch>
            </Layout>
        )
    }
}


const app = (
    <Router basename='/'>
        <App />
    </Router>
)

if (document.getElementById('container-app')) {
    render(app, document.getElementById('container-app'));
} else {
    document.write('No entry-point has been set')
}
