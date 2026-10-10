# FancyPlayerCount

FancyPlayerCount is a PocketMine-MP plugin inspired by Zeqa Network. It raises the maximum player count reported by server queries so the displayed count can remain above the number of players currently online.

## Requirements

- PocketMine-MP API 5.
- A PHP runtime supported by the PocketMine-MP server.

## Installation

1. Download the latest `FancyPlayerCount.phar` from the [GitHub Releases](https://github.com/ReinfyTeam/FancyPlayerCount/releases) page.
2. Put the PHAR in the server's `plugins` directory.
3. Restart the server.

The plugin has no commands, permissions or configuration file.

## Behavior

When PocketMine-MP regenerates server query information, FancyPlayerCount sets the reported maximum player count to one more than the number of players currently online. It does not change the actual online-player list, the server's connection limit or player permissions.

## Development

Install the locked development dependencies and run the maximum-level PHPStan check:

```text
composer install
composer analyse
```

The build workflow uses DevTools to generate and inspect the plugin PHAR. Its builder and GitHub Actions inputs are pinned in CI so a build can be reproduced from the repository revision.

## Releases

The current stable release is [v2.0.0](https://github.com/ReinfyTeam/FancyPlayerCount/releases/tag/v2.0.0).

## Credits

The plugin is inspired by Zeqa Network. Existing upstream attribution is retained in the source and license files.

## License

FancyPlayerCount is released under the [GNU Lesser General Public License 2.1](LICENSE).
