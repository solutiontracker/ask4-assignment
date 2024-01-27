# Ask4 assignment using Laravel framework

## Assignment description

### Relational DB design

Design and build a DB schema in an RDBMS of your choice (from Postgresql, MySql, Sqlite) that can represent networks of devices (e.g. an office computer network) - there are many possible types of network device, but for this test we will only ask you to actually implement two: ethernet switches and servers.

* All devices have a hostname that can be assumed to always uniquely identify the device
* All device types can have many network interfaces, each of which can be assumed to have 1 MAC address and 1 IPv4 address.
* One of these interfaces takes the role of the management interface - which we can connect to over IP in order to run commands to query or configure the device.
* All devices can either be managed via telnet or SSH.  Which one is appropriate is set on a per-device basis.
* There are certain standard commands that we can run on all device types; however the command syntax and the format of the response will depend on the operating system that the device is running.
* As well as this data and functionality that is shared between all devices, each device type may have some specific fields. For example, a switch must record its model name, and a server must record the amount of installed RAM.

Model these devices and how they are connected together so we would be able query the database to ask questions such as:

* Given a device, list what other devices it is directly connected to.
* Given a pair of devices, find if they are directly connected, and if so what is the interface name, MAC and IP of each end of the connection.

You do not need to write these queries, they are just examples of what should be possible with your schema design.

Please provide the code and instructions required for us to build a database, along with a very brief human-readable overview of your design.

### Code

Using the information stored in this database we are able to automatically log in to a device over its management interface and execute CLI commands remotely.  One of the commands we can execute on any device is to tell it to list its interface configuration.  This provides, in a human readable format, a list of all interfaces on that device along with its detailed configuration.  This information could be useful, for example, for checking that the device configuration in the database is up-to-date.

Write a simple command line script and supporting classes that will take a single device hostname as an argument, query that device over its management interface (as defined in the database), and print the name, MAC and IP of each interface in CSV format - i.e. one interface per line, with the name, MAC and IP separated by commas.

* Your code should be easily extendable to cope with any number of operating systems, each with their own input and output format.  For this test, we will only ask you to implement two, "LinuxLikeOS" and "SwitchLikeOS".
* Example formats for the commands and responses of those operating systems are given in the examples directory.  The number of interfaces returned may differ from the number shown in the examples, but you can assume there is at least one.
* You are not expected to write the actual SSH or telnet code.  Assume the existence of classes `Ask4\Network\SSHClient` and `Ask4\Network\TelnetClient` which implement the interface `Ask4\Network\DeviceClient` we have provided in src.


### Implementation

I have implemented database schema by using Laravel migration, such as

- Go to this location \database\migration\ and check all migrations that have been created to create database according to assignment requirement.
- Go to this location \app\Models\ and you can see here all the models[tables] by using that we can query information with different defined relationships between entities.
- Go to this location \app\Ask4\ and you can see here our classes structure to manage devices via telnet or SSH.
- Go to this location \app\Console\Commands\NetworkCommand.php and you can see here command execution script.
