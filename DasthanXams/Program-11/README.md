# Program 11: Upload a Web Project to GitHub Using Git

This program demonstrates how to create a simple front-end web application (`StudentApp`) and publish it using Git and GitHub Pages.

---

## 1. Project Files
- `index.html` - Homepage with heading, description, and interactive button.
- `style.css` - Responsive stylesheet for layout and colors.
- `script.js` - JavaScript handling button click alert ("Welcome, Student!").

---

## 2. Step-by-Step GitHub Setup Instructions

### Step A: Create a Repository on GitHub
1. Log in to [GitHub](https://github.com).
2. In the top right corner, click **+** and select **New repository**.
3. Set **Repository name** to `StudentApp`.
4. Choose **Public**.
5. Do not initialize with README, .gitignore, or license (we already have local project files).
6. Click **Create repository**.

---

### Step B: Terminal / Git Commands to Upload
Open your command prompt or Git Bash terminal inside this `Program-11` folder and execute the following commands in order:

```bash
# 1. Initialize local Git repository
git init

# 2. Stage all files for commit
git add .

# 3. Commit files with an informative message
git commit -m "Initial commit"

# 4. Rename default branch to main
git branch -M main

# 5. Link local repository to your remote GitHub repository
# (Replace <your-username> with your actual GitHub username)
git remote add origin https://github.com/<your-username>/StudentApp.git

# 6. Push local commits to GitHub
git push -u origin main
```

---

### Step C: Publish with GitHub Pages
1. On your GitHub repository page (`StudentApp`), click on **Settings** (tab at the top right).
2. On the left sidebar menu, click on **Pages**.
3. Under **Build and deployment**:
   - **Source**: Deploy from a branch.
   - **Branch**: Select `main` and folder `/ (root)`.
4. Click **Save**.
5. Wait 1–2 minutes. Refresh the page to see the live published URL:
   `https://<your-username>.github.io/StudentApp/`
