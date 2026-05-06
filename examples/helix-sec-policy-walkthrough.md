# Helix Sec Policy Vault Walkthrough

I use this file as a small checklist before changing the PHP implementation.

| Case | Focus | Score | Lane |
| --- | --- | ---: | --- |
| baseline | trust boundary | 158 | ship |
| stress | claim drift | 136 | watch |
| edge | replay exposure | 144 | ship |
| recovery | policy width | 181 | ship |
| stale | trust boundary | 140 | ship |

Start with `recovery` and `stress`. They create the widest contrast in this repository's fixture set, which makes them better review anchors than the middle cases.

The next useful expansion would be a malformed fixture around claim drift and policy width.
