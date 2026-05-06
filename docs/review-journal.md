# Review Journal

This journal records the domain cases that matter before widening the public API.

The local checks classify each case as `ship`, `watch`, or `hold`. That gives the project a small review vocabulary that matches its security tooling focus without claiming live deployment or external usage.

## Cases

- `baseline`: `trust boundary`, score 158, lane `ship`
- `stress`: `claim drift`, score 136, lane `watch`
- `edge`: `replay exposure`, score 144, lane `ship`
- `recovery`: `policy width`, score 181, lane `ship`
- `stale`: `trust boundary`, score 140, lane `ship`

## Note

The useful failure mode here is a wrong decision on a named case, not a vague style disagreement.
