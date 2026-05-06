# helix-sec-policy-vault

`helix-sec-policy-vault` treats security tooling as a local verification problem. The PHP implementation is intentionally narrow, but the fixtures and notes make the behavior explicit.

## Helix Sec Policy Vault Checkpoints

Treat the compact fixture as the contract and the extended examples as a scratchpad. The code should stay boring enough that a change in behavior is obvious from the test output.

## Architecture Notes

The core is a scoring model over demand, capacity, latency, risk, and weight. That keeps trust boundaries, policy checks, and replay guards in one explicit decision path. The threshold is 179, with risk penalty 6, latency penalty 4, and weight bonus 3. The PHP implementation uses strict types and a small namespaced policy class.

## What This Is For

I use this kind of project to make a rule visible before adding more machinery around it. The important part here is not the size of the codebase. It is that the input signals, scoring rule, fixture data, and expected output can all be checked in one sitting.

## Useful Pieces

- Uses fixture data to keep policy checks changes visible in code review.
- Includes extended examples for replay guards, including `recovery` and `degraded`.
- Documents claim validation tradeoffs in `docs/operations.md`.
- Runs locally with a single verification command and no external credentials.
- Stores project constants and verification metadata in `metadata/project.json`.

## Case Study

The examples are meant to be readable before they are exhaustive. They cover enough variation to show how latency and risk can pull a decision below the threshold.

## Project Layout

- `src`: primary implementation
- `tests`: verification harness
- `fixtures`: compact golden scenarios
- `examples`: expanded scenario set
- `metadata`: project constants and verification metadata
- `docs`: operations and extension notes
- `scripts`: local verification and audit commands

## Tooling

Install PHP and run the commands from the repository root. The project does not need credentials or a hosted service.

## Local Workflow

```powershell
powershell -NoProfile -ExecutionPolicy Bypass -File scripts/verify.ps1
```

This runs the language-level build or test path against the compact fixture set.

## Quality Gate

```powershell
powershell -NoProfile -ExecutionPolicy Bypass -File scripts/audit.ps1
```

The audit command checks repository structure and README constraints before it delegates to the verifier.

## Scope

This code is local-first. It makes no claim about deployed usage and avoids credentials, hosted state, and environment-specific setup.

## Expansion Ideas

- Add malformed input fixtures so the failure path is as visible as the happy path.
- Split the scoring constants into a typed configuration object and validate it before use.
- Add a comparison mode that shows how decisions change when one signal is adjusted.
- Add one more security tooling fixture that focuses on a malformed or borderline input.
