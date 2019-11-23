import React from 'react'

import { Container } from 'react-bootstrap'


const layout = props => (
    <Container fluid>
        {props.children}
    </Container>
)

export default layout
