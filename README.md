## Troubleshooting

### Q: Custom folder icon not showing up?

**A:** In PowerShell cd to the parent folder and set the "system file" attribute on the target child folder like this:

```powershell
attrib +s folder_name
```

#### CAVEATS:

- Make sure you are in the parent folder and that the folder_name doesn't have any relative pathing artifacts (`.\`, `..\`, etc)