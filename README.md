Adminer on Docker
=================

[Adminer][adminer] is a useful tool but not that straightforward to run, as it relies on PHP. Thankfully, there's an official [Adminer Docker image][adminer-docker] that makes the process way easier.

## Usage

Start the server with:

    make up

And Adminer will be available at http://localhost:8080/ .

It can be stopped with:

    make down

## Notes

### Accessing the host machine

If using [Docker Desktop for Mac][docker-mac], the [hostname of the host machine][mac-host] is `host.docker.internal`. This address can be used to access databases running on macOS instead of another Docker container.


[adminer-docker]: https://hub.docker.com/_/adminer/
[adminer]: https://www.adminer.org/
[docker-mac]: https://www.docker.com/products/docker-desktop
[mac-host]: https://docs.docker.com/docker-for-mac/networking/#use-cases-and-workarounds
