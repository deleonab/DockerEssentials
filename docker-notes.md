## DOCKER
-- A Docker container is a loosely isolated environment running withing a host machine's kernel allowing us to run application specific code.


## KERNEL
-- A piece of software at the core of the operating system and controls intercation between all software and the CPU.

## CPU
-- Core circuitry that executes all instructions
-- Docker runs on top of an original machine's kernell making it the HOST MACHINE

## DOCKER ENGINE
-- The Docker engine concists of the following
- The server also called Docker Daemon
- The API
- CLI

The user through the CLI talks to the Daemon who uses the blueprint to construct containers on top of a host machines kernel

![Docker Engine Diagram](./images-notes/docker-engine.JPG)


## DOCKER CONTAINER ENVIRONMENT (CONTAINER)
-- Loose Isolation - Processes/running instances of one container cannot affect processes of another

-- We can set limits on resource allocation such as memory,CPU . This helps to control amount of the host kernels resources(Memory, CPU) they can consume.

-- We run application specific code. We can run an application with all its libraries and dependencies in that isolated environment. 
- This means that there is no need to install any of the dependencies on the host machine.
- The container has it's own file system.


---

---
## WHY USE CONTAINERS?
- Portability to multiple operating system environments - Docker ensures that the application can run the same way regardless of the operating system environment it is running on.
The only requirementis that the host machine has Docker installed.

- Less time setting up the environment for Developers and Engineers. More time can be spent on application specific code that drives value for them and theircompanies.
Ensures that engineers have access to the same code, code libraries and dependencies.

- Containers can be used in Development, continuous intergration and deployment environments.