| 1. Introduction
----------------
    > With the development of Composer, developers will have easy to include another packages in their project.
    > When they include a package into your project, it's likely to cause conflicts if the package overlap. 


| 2. Directory Struct
-----------------------

    ChilComposer
    |
    |__src
    |   |__Child.php
    |       |__//This class will two packages: 
    |           |__{"trueme/mapping-array": "dev-master"}
    |           |__{"guzzlehttp/guzzle": "6.2.0"}
    |
    |
    |__index.php
    |
    |__composer.json
-----------------------


| 3. Step by step do it
-----------------------
    > You have ParentComposer project: https://github.com/quocvo87/ParentComposer.git
    > ParentComposer also use: 
        |__{"trueme/mapping-array": "dev-master"}
        |__{"guzzlehttp/guzzle": "6.3.0"}
    > ParentComposer will have conflict when use: composer install/update to download packages above
    > Please review detail at ParentComposer README.md
-----------------------


