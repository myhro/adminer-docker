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


### Adminer version

This setup relies on Adminer `4.6.2` - [released on 2018-02-20][adminer-462]. That's the last version that supports [passwordless database logins][adminer-password], which are largely common on development setups.


[adminer-462]: https://github.com/vrana/adminer/tree/v4.6.2
[adminer-docker]: https://hub.docker.com/_/adminer/
[adminer-password]: https://www.adminer.org/en/password/
[adminer]: https://www.adminer.org/
[docker-mac]: https://www.docker.com/products/docker-desktop
[mac-host]: https://docs.docker.com/docker-for-mac/networking/#use-cases-and-workarounds
