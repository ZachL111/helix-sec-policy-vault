# helix-sec-policy-vault

`helix-sec-policy-vault` is a compact PHP repository for security tooling, centered on this goal: Implement a PHP security tooling project for policy stream reduction, using windowed input fixtures and late-data behavior checks.

## Use Case

I want this repository to be useful as a quick reading exercise: fixtures first, implementation second, verifier last.

## Helix Sec Policy Vault Review Notes

The first comparison I would make is `policy width` against `claim drift` because it shows where the rule is most opinionated.

## Highlights

- `fixtures/domain_review.csv` adds cases for trust boundary and claim drift.
- `metadata/domain-review.json` records the same cases in structured form.
- `config/review-profile.json` captures the read order and the two review questions.
- `examples/helix-sec-policy-walkthrough.md` walks through the case spread.
- The PHP code includes a review path for `policy width` and `claim drift`.
- `docs/field-notes.md` explains the strongest and weakest cases.

## Code Layout

The repository has two validation layers: the original compact policy fixture and the domain review fixture. They are separate so one can change without hiding failures in the other.

The added PHP path is deliberately direct, with fixtures doing most of the explaining.

## Run The Check

```powershell
powershell -NoProfile -ExecutionPolicy Bypass -File scripts/verify.ps1
```

## Regression Path

The same command runs the local verification path. The highest-scoring domain case is `recovery` at 181, which lands in `ship`. The most cautious case is `stress` at 136, which lands in `watch`.

## Future Work

The fixture set is small enough to audit by hand. The next useful expansion is malformed input coverage, not extra surface area.
