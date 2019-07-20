# Docker
- Build and run container: `docker-compose up -d`
- Stop container: `docker-compose down`
- Update container: `docker-compose up -d --force-recreate --build`
- Container shell: `docker exec -ti php bash`
    - Exit container shell: `exit`

# Run the tests
- `./vendor/bin/phpunit`
- Test within the container: `runTest`

# Git flow 
- `git commit -am "messaggio"`
- `git push`

# Objective
**_Sing a song kata_** (http://kata-log.rocks/sing-a-song-kata)


Code to produce a popular children's nursary rhyme was produced by a web agency for the customer last year. The customer now desires to produce multiple different versions of the song using the same structure but based on different themes, for example a current popular children's movie featuring a cast of animals. The customer asks that you make the song configurable for different lists of animals. The customer cannot guarentee that there will be the same number of animals in each different version.

No documentation or tests were provided by the previous developer.

Refactor the code to allow for the customer's needs. 
_Remember: refactoring can only be done in the presence of tests that are passing, and after refactoring the tests still pass!_

**_Run song_**

- `cd /var/www/refactoring-exercises/src/sing-a-song-kata`
- `php song.php`
