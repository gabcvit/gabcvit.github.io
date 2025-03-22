describe("BlogPage", () => {
	it("should load the blog page", () => {
	  cy.visit("/blog");
	  cy.contains("Blog").should("be.visible");
	});
  });
  