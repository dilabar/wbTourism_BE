<?php

return [

    
    
    
   
 
   'db_config' => [
            'driver'=> 'mongodb',
            'host'=> env('MONGO_DB_HOST', 'localhost'),
            'port'=> env('MONGO_DB_PORT', 27017),
            'database'=> env('MONGO_DB_DATABASE'),
            'username'=> 'Gopinath',
            'password'=> '1234',
            'options'  => [
                'database' => 'admin' // sets the authentication database required by mongo 3
            ]
        ],
        
   
    
    //'db_config' => env('DB_CONNECTION', 'mongodb'),

    /*
    |--------------------------------------------------------
    |
    |   Config of bucket. Default prefix of GridFS collection. Default is 'fs'
    |
    |--------------------------------------------------------
    */
    'bucket'    =>  [
        'prefix'            =>  'fs',
        'chunkSizeBytes'    =>  261120,
        'readPreference'    =>  'primaryPreferred',
        'readConcern'       =>  'available',
    ],

    /*
    |--------------------------------------------------------
    |
    |   By default store file add metadata:
    |       - uuid
    |       - created_at
    |       - updated_at
    |       - downloads
    |
    |--------------------------------------------------------
    */
    'add_meta'      =>  true,

    /*
    |--------------------------------------------------------
    |
    |   Storage disk. Temporary use for storing file in GridFS
    |
    |--------------------------------------------------------
    */
    'storage'       =>  'local',
];
