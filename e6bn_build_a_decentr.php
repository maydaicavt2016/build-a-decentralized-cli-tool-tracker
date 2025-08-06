<?php
/*
API Specification for Decentralized CLI Tool Tracker

This API will allow users to track CLI tools and their versions across different nodes in a decentralized network.

EndPoints:

1. POST /tools
   - Create a new tool
   - Request Body: {
       "name": string,
       "version": string,
       "node_id": string
     }
   - Response: {
       "tool_id": string
     }

2. GET /tools
   - Get a list of all tools
   - Response: [
       {
         "tool_id": string,
         "name": string,
         "version": string,
         "node_id": string
       }
     ]

3. GET /tools/{tool_id}
   - Get a specific tool
   - Request Param: tool_id (string)
   - Response: {
       "tool_id": string,
       "name": string,
       "version": string,
       "node_id": string
     }

4. PUT /tools/{tool_id}
   - Update a tool
   - Request Param: tool_id (string)
   - Request Body: {
       "name": string,
       "version": string,
       "node_id": string
     }
   - Response: {
       "tool_id": string
     }

5. DELETE /tools/{tool_id}
   - Delete a tool
   - Request Param: tool_id (string)
   - Response: {}

6. POST /nodes
   - Create a new node
   - Request Body: {
       "node_id": string,
       "node_name": string
     }
   - Response: {
       "node_id": string
     }

7. GET /nodes
   - Get a list of all nodes
   - Response: [
       {
         "node_id": string,
         "node_name": string
       }
     ]

8. GET /nodes/{node_id}
   - Get a specific node
   - Request Param: node_id (string)
   - Response: {
       "node_id": string,
       "node_name": string
     }

9. PUT /nodes/{node_id}
   - Update a node
   - Request Param: node_id (string)
   - Request Body: {
       "node_name": string
     }
   - Response: {
       "node_id": string
     }

10. DELETE /nodes/{node_id}
    - Delete a node
    - Request Param: node_id (string)
    - Response: {}

Database Schema:

tools table:
- tool_id (primary key, uuid)
- name (string)
- version (string)
- node_id (foreign key referencing nodes table)

nodes table:
- node_id (primary key, uuid)
- node_name (string)
*/

// API implementation goes here...

?>