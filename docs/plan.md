# Site plan

## Status (Nov 1, 2026)
| Piece | Content | Design |
|---|---|---|
| Homepage | Copy done | Done (`design/homepage.dc.html`) |
| 01 Snapchat lenses | Done (`content/lenses.json`) | Homepage card + full page done (`design/lenses.dc.html`) |
| 02 Games | Needed | Homepage card only |
| 03 Sewing | Needed | Homepage card only |
| 04 Puzzles | Started (`content/puzzles.json`); photos needed | Homepage card done |
| 05 Doodles | Needed | Homepage card only |
| 06 Apps & work | Experience done; projects needed | Homepage card done |

## Structure
- Homepage: jigsaw hero → contents → On the workbench + Recently → pieces 01–06 → about → footer.
- Each piece gets its own page: /lenses, /games, /sewing, /puzzles, /doodles, /work.

## Lenses page
- Intro: "Made for an audience of one. Found a million." with combined totals.
- Featured Vi Arcane, with backstory and stats.
- "Spotted in the wild": four Spotlight embeds, credited by handle and date.
- Cards for the other five lenses. On desktop hover, each card flips to its Snapcode ("scan to try it").
- Media: Snapchat's official lens embed (`https://www.snapchat.com/lens/<id>/embed`), lazy-loaded. For Emmie shows its lens icon.

## Puzzles
- Strategy line: "Despite popular advice, I rarely start with the edges. Every puzzle gets its own strategy, and figuring it out is half the fun."
- Competitions: OC Speed Puzzlers (solo, 1h 07m, The New Yorker puzzle) · USA Jigsaw Nationals 2026, Atlanta (pairs) · OC 24h Speed Puzzle Marathon (team, 10th).
- Video: USA Jigsaw's Pair Final livestream, starting at 1:04:45. The puzzle partner stays unnamed.

## Stack (planned)
Astro on GitHub Pages. Each piece is a set of data/markdown files, so adding a project or updating the workbench takes minutes.

## Next
1. Content: games, sewing, doodles, apps & work projects, puzzle photos, portrait, workbench items, new résumé PDF.
2. Build the real site.
3. Later (P2): "Try it on here" with Snap Camera Kit.

## About the design files
`design/*.dc.html` are design mock-ups exported from a Claude design canvas. They need that canvas's runtime to render, so treat them as a reference for the build, not as finished pages.
